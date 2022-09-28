const deleteForms = document.querySelectorAll('.delete-form');
deleteForms.forEach(form => {
    form.addEventListener('submit', event => {
        event.preventDefault();
        const hasConfirmed = window.confirm('Vuoi davvero eliminare questo post?');
        if (hasConfirmed) form.submit();
    })
})