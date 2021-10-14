        const deleteFormElements = document.querySelectorAll('.delete-form');
        deleteFormElements.forEach(form => {
            form.addEventListener('submit', function(e) {
            const title = form.getAttribute('data-comic');
            e.preventDefault();
            const confirm = window.confirm(`Questa azione è irreversibile, vuoi eliminare  ${title}?`);
            if (confirm) this.submit();
        }); 
        })