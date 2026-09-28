// Copy-to-clipboard for code blocks rendered by DocsHelper::codeBlock().
// One delegated listener; no build step, no dependency.
document.addEventListener('click', function (event) {
    var button = event.target.closest('[data-copy-code]');
    if (!button) {
        return;
    }

    var code = button.nextElementSibling;
    var text = code ? code.textContent : '';

    navigator.clipboard.writeText(text).then(function () {
        var original = button.textContent;
        button.textContent = 'Copied!';
        setTimeout(function () {
            button.textContent = original;
        }, 1500);
    });
});
