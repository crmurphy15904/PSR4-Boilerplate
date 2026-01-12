# Lemon-Aiders Page

## Usage

The Test Plugin now includes a shortcode that displays "Hello, Lemon-Aiders" when added to any WordPress page or post.

### Shortcode

```
[lemon_aiders]
```

### How to Use

1. Install and activate the Test Plugin
2. Create a new page or post in WordPress
3. Add the shortcode `[lemon_aiders]` to the content
4. Publish or preview the page
5. The page will display "Hello, Lemon-Aiders"

### Example

In the WordPress editor, simply add:

```
[lemon_aiders]
```

And it will render as:

```
Hello, Lemon-Aiders
```

## Implementation Details

The shortcode is registered in the `Company\Test_Plugin\Frontend\Display` class and is automatically loaded when the plugin is activated.
