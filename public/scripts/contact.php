<?php
include_once(dirname(__DIR__, 2) . '/app/functions.php');
function execRule($rule, $valueToBeChecked)
{
    $error = [
        'require' => 'Input is required.',
        'email' => 'Correct format required.',
        'same' => 'Input must match',
        'file' => 'Check uploaded file',
        'default' => 'no error'
    ];
    $result = [false, $error['default']];
    if (preg_match("/\w+:\w+/i", $rule)) {
        $parseRule = explode(':', $rule);
        switch ($parseRule[0]) {
            case 'same':
                if (isset($valueToBeChecked) && !empty(trim($valueToBeChecked) && !empty(trim($_POST[$parseRule[1]])))) {
                    if (strcmp($valueToBeChecked, $_POST[$parseRule[1]]) != 0) {
                        $result = [true, $error['same']];
                    }
                }
                break;
            case 'file':
                $search = $parseRule[1];
                if (!preg_match("/{$search}/i", $valueToBeChecked)) {
                    $result = [true, $error['file']];
                }
                break;
        }
    }
    switch ($rule) {
        case 'require':
            if (isset($valueToBeChecked) && empty(trim($valueToBeChecked))) {
                $result = [true, $error['require']];
            }
            break;
        case 'email':
            if (!filter_var($valueToBeChecked, FILTER_VALIDATE_EMAIL)) {
                $result = [true, $error['email']];
            }
            break;
    }
    return $result;
}
function execValidate($validationRuleSet)
{
    $failedValidateList = [];
    if (!empty($validationRuleSet['post'])) {
        foreach ($_POST as $rawInputField => $inputValue) {
            foreach ($validationRuleSet['post'] as $inputField => $ruleSet) {
                if ($rawInputField === $inputField) {
                    foreach ($ruleSet as $rule) {
                        $checkedResult = execRule($rule, $inputValue);
                        if ($checkedResult[0]) {
                            $failedValidateList['error']['field'][$rawInputField][$rule]['is_error'] =  $checkedResult[0];
                            $failedValidateList['error']['field'][$rawInputField][$rule]['message'] =  $checkedResult[1];
                        }
                    }
                }
            }
        }
    }
    if (!empty($validationRuleSet['files'])) {
        foreach ($_FILES as $fileName => $fileDetails) {
            foreach ($validationRuleSet['files'] as $inputField => $ruleSet) {
                if ($fileName == $inputField) {
                    foreach ($ruleSet as $rule) {
                        $checkedResult = execRule($rule, $fileDetails['type']);
                        if ($checkedResult[0]) {
                            $failedValidateList['error']['field'][$fileName][$rule]['is_error'] =  $checkedResult[0];
                            $failedValidateList['error']['field'][$fileName][$rule]['message'] =  $checkedResult[1];
                        }
                    }
                }
            }
        }
    }
    if (!empty($failedValidateList)) {
        $failedValidateList['error']['message'] = 'failed';
    }
    return $failedValidateList;
}
function validateForm()
{
    $validateSet = [
        'post' => [
            'hidden_id' => ['required'],
            'company' => ['require'],
            'first_name' => ['require'],
            'last_name' => ['require'],
            'email' => ['email', 'require'],
            'emailConfirm' => ['email', 'require', 'same:email'],
            'message' => ['require'],
        ],
        'files' => [
            'resumeFile' => ['file:pdf'],
        ],
    ];
    $validate = execValidate($validateSet);
    if (empty($validate)) {
        session_start();
        $_SESSION['validated_field'] = $_POST;
        $url = getServerProtocol() . getHost() . '/page-confirmation';
        return json_encode(['success' => ['message' => 'Success', 'url' => $url]]);
    } else {
        return json_encode($validate);
    }
}

if (isset($_POST) && isset($_FILES)) {
    echo validateForm();
}
