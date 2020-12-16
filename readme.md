# Static Template

![Version](https://img.shields.io/badge/version-v1.0.0-blue.svg) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#) ![Maintainer](https://img.shields.io/badge/maintainer-James%20Ocariza-green.svg)

This repo serves as a starter template for [static web pages](https://en.wikipedia.org/wiki/Static_web_page).Instead creating your own front-end architecture, use this for quick and easy development.

##### Table of Contents

- [:pushpin: Prerequisites](#Prerequisites)
- [:rocket: Installing Static Template](#Installing)
- [:computer: Usage of Static Template](#Usage)
- [:memo: Contributing to Static Template](#Contributing)
- [:paperclip: Additional Info](#Additional)
  - [Errors](#Errors)
- [:two_hearts: Acknowledgements and References](#Acknowledgements)
- [:mailbox: Credits](#Credits)
- [:handshake:Contribute](#Contribute)

## <a name='Prerequisites'></a> :pushpin: Prerequisites

Before you begin, ensure you have met the following requirements:

- You have a `Windows 10` machine.

| Tool                                                                 | Version | Description                                                                           |
| -------------------------------------------------------------------- | ------- | ------------------------------------------------------------------------------------- |
| [NVM](https://github.com/coreybutler/nvm-windows/releases/tag/1.1.7) | > 1.1   | Node version manager for fast switching node version                                  |
| Node                                                                 | >= 8.15 | Install Node via [NVM](https://github.com/coreybutler/nvm-windows/releases/tag/1.1.7) |

:warning: If you have Node in your local machine please delete and reinstall it using the NVM.

## <a name='Installing'></a> :rocket: Installing Static Template

To install Static template in your local machine, run this following script in your terminal:

**Windows**:

```sh
 git clone https://github.com/HiPE-Inc-ltd/static_template
```

## <a name='Usage'></a>:computer: Usage of Static template

To begin the development, follow this steps listed below:

1. go to **`src/`** folder
2. run **`npm install`**
3. after the dependencies installed, run **`gulp build && gulp sync`**

##### Code Block:

```sh
cd src
npm install
gulp build
gulp sync
```

When you run this scripts it will generate a bundled file to `public/` folder.

:warning: You must only edit in `src/` folder to avoid confusion.

## <a name='Contributing'></a> :memo: Contributing to Static template

Before cloning, create a [new branch](https://github.com/HiPE-Inc-ltd/Nanashoku) for your local development.

To contribute to Nanashoku, follow these steps:

1. Fork this repository.
2. Create a branch: `git checkout -b <branch_name>`.
3. Make your changes and commit them: `git commit -m '<commit_message>'`
4. Push to the original branch: `git push origin <project_name>/<location>`
5. Create the pull request.

Alternatively see the GitHub documentation on [creating a pull request](https://help.github.com/en/github/collaborating-with-issues-and-pull-requests/creating-a-pull-request).

## <a name='Additional'></a> :paperclip: Additional Info

Additional information about Static template

- `src/` is the main source code
- `public/` is the release folder of compressed file from `src/`.
  - `public/minified/**/css` this refers to minified version of CSS
  - `public/tinified/**/img` this refers the tinified/compressed image
  - `public/uglified/` this refers a compressed javascript
- ### <a name='Errors'></a>Errors

  If you encounter this problem `bash gulp command not found` consider this running this script in cmd

  ```sh
  npm install --global gulp-cli
  ```

  Installing the gulp in global scope.

## <a name='Acknowledgements'></a>:two_hearts: Acknowledgements and References

- This is made by [James Ocariza](https://github.com/CatMeowlet/).

## <a name='Credits'></a> :mailbox: Credits

- [James Ocariza](https://github.com/CatMeowlet/) - Creator of Static template
- [EJ Anton S. Potot](https://github.com/ezio1404/) - Improving the document

## <a name='Contribute'></a> :handshake: Contribute

Contributions, issues and feature requests are welcome!

- Issue Tracker: https://github.com/HiPE-Inc-ltd/static_template/issues
- Source Code: https://github.com/HiPE-Inc-ltd/static_template

---

Copyright © 2020 [HiPE Inc. ltd.](https://bpoc.co.jp/) All rights reserved
