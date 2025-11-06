document.addEventListener('DOMContentLoaded', function () {
    const copyButtons = document.querySelectorAll('.copy-btn');

    // Handle copy to clipboard
    copyButtons.forEach(button => {
        button.addEventListener('click', function () {
            const parent = this.parentElement;
            let textToCopy = '';

            if (parent.tagName === 'PRE') {
                // Clone the node and remove the button to get only the text
                const preClone = parent.cloneNode(true);
                preClone.querySelector('.copy-btn').remove();
                textToCopy = preClone.textContent.trim();
            } else if (parent.tagName === 'LI') {
                const codeElement = parent.querySelector('code');
                if (codeElement) {
                    textToCopy = codeElement.innerText;
                }
            }

            if (textToCopy) {
                navigator.clipboard.writeText(textToCopy).then(() => {
                    const originalIcon = this.innerHTML;
                    this.innerHTML = '<i class="fa-solid fa-check"></i>';
                    this.classList.add('copied');
                    setTimeout(() => {
                        this.innerHTML = originalIcon;
                        this.classList.remove('copied');
                    }, 1500);
                }).catch(err => {
                    console.error('Failed to copy: ', err);
                });
            }
        });
    });
});