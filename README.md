# Font Awesome 5

[Font Awesome 5](https://fontawesome.com/) for Magento2.

### Contents

 1. [Installation](#installation)
 2. [Usage](#usage)
 3. [Advanced Usage](#advanced-usage)

### Installation

 1. Get the sources

    ```bash
    cd <magento_root>
    composer require swissup/font-awesome-5
    bin/magento module:enable Swissup_Core Swissup_FontAwesome5
    bin/magento setup:upgrade
    ```

 2. Enable it for the stores you need at _Stores > Configuration > Swissup > FontAwesome 5_.

    > If you are a happy FontAwesome Pro version user, you can enable CDN Pro
    > feature as well.

### Usage

 1. Search for icon you need at [official FontAwesome site](https://fontawesome.com/icons?d=gallery)
 2. Copy and Paste selected code into HTML content.

    Example:

    ```html
    <i class="fas fa-bicycle"></i>
    <i class="fab fa-magento"></i>
    ```

 3. That's all!

### Advanced Usage

Looking for advanced usage examples? Here you go:

 - [Sizing Icons](https://fontawesome.com/how-to-use/on-the-web/styling/sizing-icons)
 - [Fixed Width Icons](https://fontawesome.com/how-to-use/on-the-web/styling/fixed-width-icons)
 - [Icons as a List](https://fontawesome.com/how-to-use/on-the-web/styling/icons-in-a-list)
 - [Rotating Icons](https://fontawesome.com/how-to-use/on-the-web/styling/rotating-icons)
 - [Animating Icons](https://fontawesome.com/how-to-use/on-the-web/styling/animating-icons)
 - [Bordered + Pulled Icons](https://fontawesome.com/how-to-use/on-the-web/styling/bordered-pulled-icons)
 - [Stacking Icons](https://fontawesome.com/how-to-use/on-the-web/styling/stacking-icons)
 - [Power Transforms](https://fontawesome.com/how-to-use/on-the-web/styling/power-transforms)
 - [Masking](https://fontawesome.com/how-to-use/on-the-web/styling/masking)
 - [Layering, Text, &amp; Counters](https://fontawesome.com/how-to-use/on-the-web/styling/layering)
