require('./bootstrap');
require('trix');
const hljs = require('highlight.js');

document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('pre').forEach((block) => {
      hljs.highlightBlock(block);
    });
});
