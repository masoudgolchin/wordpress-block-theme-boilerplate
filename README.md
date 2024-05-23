# WordPress Block-Based Theme Boilerplate

Welcome to the WordPress Block-Based Theme Boilerplate! This project serves as a starting point for developing custom block-based themes for WordPress.

## Features

- **Block Editor Support**: Fully compatible with the WordPress block editor (Gutenberg).
- **Modern Development Workflow**: Utilizes modern web development tools and practices.
- **Customizable**: Easily extendable to fit your specific needs.

## Requirements

- **WordPress**: Version 5.8 or higher
- **Node.js**: Version 12.x or higher
- **npm**: Version 6.x or higher

## Installation

1. **Go to your WordPress theme directory. And Clone the repository to your theme directory**:

   ```sh
   git clone https://github.com/masoudgolchin/wordpress-block-theme-boilerplate.git
   ```

2. **Navigate to the theme directory**:

   ```sh
   cd wordpress-block-theme-boilerplate
   ```

3. **Install dependencies**:

   ```sh
   npm install
   ```

4. **Build the theme**:

   ```sh
   npm run build
   ```

5. **Activate the theme**:
   - Upload the theme to your WordPress installation.
   - Go to the WordPress admin dashboard.
   - Navigate to Appearance > Themes.
   - Activate the "Block-Based Theme Boilerplate".

## Development

- **Start development server**:

  ```sh
  npm start
  ```

- **Build for production**:
  ```sh
  npm run build
  ```

## File Structure

```sh
wordpress-block-theme-boilerplate/
├── assets/
│ ├── css/
│ ├── js/
│ └── img/
├── includes/
│ └── template-functions.php
├── blocks/
│ ├── block-name/
│ │ ├── block.json
│ │ ├── edit.js
│ │ ├── editor.scss
│ │ ├── index.js
│ │ ├── render.php
│ │ ├── style.scss
│ │ └── view.js
├── build/
├── parts/
├── patterns/
├── templates/
│ └── index.html
│ └── single.html
├── styles/
├── style.css
├── functions.php
├── index.php
├── package.json
└── theme.json
└── README.md
```

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any improvements or bug fixes.

## License

This theme, like WordPress, is licensed under the GPL.

## Resources

- [WordPress Block Editor Handbook](https://developer.wordpress.org/block-editor/)
- [WordPress Theme Handbook](https://developer.wordpress.org/themes/)
