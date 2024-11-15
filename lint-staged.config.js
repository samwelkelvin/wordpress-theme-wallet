module.exports = {
  "**/*.{css,js}": ["prettier --write"],

  "**/*.php": ["composer update && composer cs-fix"],
};
