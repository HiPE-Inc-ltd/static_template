<?php
include_once(dirname(__DIR__, 2) . '/app/functions.php');
function execRule($rule, $valueToBeChecked)
{
    $error = [
        'require' => '必須項目です',
        'email' => '',
        'same' => 'メールアドレスが一致しません',
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
    foreach ($_POST as $rawInputField => $inputValue) {
        foreach ($validationRuleSet as $inputField => $ruleSet) {
            if ($rawInputField === $inputField) {
                foreach ($ruleSet as $rule) {
                    $checkedResult = execRule($rule, $inputValue);
                    if ($checkedResult[0]) {
                        $failedValidateList['field_error'][$rawInputField][$rule]['is_error'] =  $checkedResult[0];
                        $failedValidateList['field_error'][$rawInputField][$rule]['message'] =  $checkedResult[1];
                    }
                }
            }
        }
    }
    return $failedValidateList;
}
function validateForm()
{
    $validateSet = [
        'surname' => ['require'],
        'name' => ['require'],
        'email' => ['email', 'require'],
        'emailConfirm' => ['email', 'require', 'same:email'],
        'message' => ['require'],
    ];
    $validate = execValidate($validateSet);
    if (empty($validate)) {
        session_start();
        $_SESSION['validated_field'] = $_POST;
        $url = getServerProtocol() . getHost() . '/page-confirmation';
        return json_encode(['redirect' => $url]);
    } else {
        return json_encode($validate);
    }
}

if (!empty($_POST)) {
    echo validateForm();
}
