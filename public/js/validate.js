(function () {
  "use strict";    

  const Form = document.querySelector('.php-email-form');
  Form.addEventListener('submit', function (event) {
    event.preventDefault();

    this.querySelector('.loading').classList.add('d-block');
    this.querySelector('.error-message').classList.remove('d-block');
    this.querySelector('.sent-message').classList.remove('d-block');

    const action = this.getAttribute('action');
    
    const formData = {};
    [...event.target.elements].forEach(el => {
      formData[el.getAttribute('name')] = el.value;
    });

    setTimeout(() => form_submit(this, action,formData), 2000);
  });


  function form_submit(form, action, formData) {
    fetch(action, {
      method: 'POST',
      body: JSON.stringify(formData),
      headers: {'X-CSRF-TOKEN': formData._token}
    })
    .then(response => {
      if (response.ok) return response.json()
      else throw new Error(`${response.status} ${response.statusText} ${response.url}`);
    })
    .then(data => {
      form.querySelector('.loading').classList.remove('d-block');
      form.querySelector('.sent-message').classList.add('d-block');
      form.reset();
    })
    .catch((error) => displayError(form, error));
  }

  function displayError(form, error) {
    form.querySelector('.loading').classList.remove('d-block');
    form.querySelector('.error-message').innerHTML = error;
    form.querySelector('.error-message').classList.add('d-block');
  }

})();
