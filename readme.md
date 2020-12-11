# Static Template

This repo serves as a starter template for [static web pages](https://en.wikipedia.org/wiki/Static_web_page).Instead creating your own front-end architecture, use this for quick and easy development.

- [1. Installation](#1-installation)
  - [1.1 Prerequisites](#1.1-prerequisites)
- [2. Usage](#2-usage)
- [3. Additional Info](#3-addtional-info)
- [4. Credits](#4-credits)

## 1. Installation

- ### 1.1 Prerequisites

  Your local machine must have node installed via [NVM](https://github.com/coreybutler/nvm-windows/releases/tag/1.1.7)

  | Tool | Version |
  | ---- | ------- |
  | Node | >= 8.15 |

Go to your desired folder and type this script in your terminal.

```
> git clone https://github.com/HiPE-Inc-ltd/static_template
```

## 2. Usage

After cloning, run this following scripts in your terminal

```
> cd src
> npm install
> gulp build
> gulp watch
```

When you run this scripts it will generate a bundled file to `public/` folder.

:warning: You must only edit in `src/` folder to avoid confusion.

## 3. Additional Info

- `src/` means source code
- `public/` means release folder

## 4. Credits

- [James Ocariza](https://github.com/CatMeowlet/) - Creator of Static template
- [EJ Anton S. Potot](https://github.com/ezio1404/) - Improving the document
