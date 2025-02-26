<div class="dashboard-main inputs">
  <h2>Dodaj dane rozliczeniowe:</h2>
  <div class="radio-checkboxes-box">
    <label class="custom-radio-container radio-person">Osoba prywatna <input type="radio" name="account" class="custom_input" checked>
      <span class="custom-radio-checkmark"></span>
    </label>
    <label class="custom-radio-container radio-company">Firma <input type="radio" name="account" class="custom_input">
      <span class="custom-radio-checkmark"></span>
    </label>
  </div>
  <form class="db-inputs" id="person-inputs-box">
  <div class="db-inputs__row">
  <div class="db-inputs__left">
      <div class="input-slot">
        <label for="name">Imię *</label>
        <input class="form-input" type="text" name="name" id="name" placeholder="np. Krzysztof" required>
      </div>
      <div class="input-slot">
        <label for="surname">Nazwisko *</label>
        <input class="form-input" type="text" name="surname" id="surname" placeholder="Nowak" required>
      </div>
      <div class="input-slot">
        <label for="telephone">Telefon</label>
        <input class="form-input" type="text" name="telephone" id="telephone" placeholder="np. 555 555 555">
      </div>
    </div>
    <div class="db-inputs__right">
      <div class="input-slot">
        <label for="select-country">Wybierz kraj</label>
        <select class="form-select" name="select-country" id="select-country">
          <option value="Polska">Polska</option>
          <option value="Niemcy">Niemcy</option>
        </select>
      </div>
      <div class="inputs-row">
        <div class="input-slot">
          <label for="street">Ulica *</label>
          <input class="form-input" type="text" name="street" id="street" placeholder="np. Warszawska" required>
        </div>
        <div class="input-slot">
          <label for="home-number">Nr domu *</label>
          <input class="form-input" type="text" name="home-number" id="home-number" placeholder="np. 320" required>
        </div>
        <div class="input-slot">
          <label for="apartment-number">Nr lokalu</label>
          <input class="form-input" type="text" name="apartment-number" id="apartment-number" placeholder="np. 15">
        </div>
      </div>
      <div class="inputs-row">
        <div class="input-slot">
          <label for="zip-code">Kod pocztowy *</label>
          <input class="form-input" type="text" name="zip-code" id="zip-code" placeholder="00-030" required>
        </div>
        <div class="input-slot">
          <label for="city">Miejscowość *</label>
          <input class="form-input" type="text" name="city" id="city" placeholder="np. Warszawa" required>
        </div>
      </div>
    </div>
</div>

    <div class="buttons">
        <button class="white-btn">Zapisz dane</button>
      </div>
  </form>
  <form class="db-inputs" id="company-inputs-box">
  <div class="db-inputs__row">
  <div class="db-inputs__left">
      <div class="input-slot">
        <label for="company-nip">NIP *</label>
        <input class="form-input" type="text" name="company-nip" id="company-nip" placeholder="np. 022-41-11-111" required>
      </div>
      <div class="input-slot">
        <label for="company-name">Firma *</label>
        <input class="form-input" type="text" name="company-name" id="company-name" placeholder="np. P.W. Nazwa" required>
      </div>
      <div class="input-slot">
        <label for="company-telephone">Telefon</label>
        <input class="form-input" type="text" name="company-telephone" id="company-telephone" placeholder="np. 555 555 555">
      </div>
    </div>
    <div class="db-inputs__right">
      <div class="input-slot">
        <label for="company-select-country">Wybierz kraj</label>
        <select class="form-select" name="company-select-country" id="company-select-country">
          <option value="Polska">Polska</option>
          <option value="Niemcy">Niemcy</option>
        </select>
      </div>
      <div class="inputs-row">
        <div class="input-slot">
          <label for="company-street">Ulica *</label>
          <input class="form-input" type="text" name="company-street" id="company-street" placeholder="np. Warszawska" required>
        </div>
        <div class="input-slot">
          <label for="company-home-number">Nr domu *</label>
          <input class="form-input" type="text" name="company-home-number" id="company-home-number" placeholder="np. 320" required>
        </div>
        <div class="input-slot">
          <label for="company-apartment-number">Nr lokalu</label>
          <input class="form-input" type="text" name="company-apartment-number" id="company-apartment-number" placeholder="np. 15">
        </div>
      </div>
      <div class="inputs-row">
        <div class="input-slot">
          <label for="company-zip-code">Kod pocztowy *</label>
          <input class="form-input" type="text" name="company-zip-code" id="company-zip-code" placeholder="00-030" required>
        </div>
        <div class="input-slot">
          <label for="company-city">Miejscowość *</label>
          <input class="form-input" type="text" name="company-city" id="company-city" placeholder="np. Warszawa" required>
        </div>
      </div>
    </div>
    </div>

    <div class="buttons">
        <button class="white-btn">Zapisz dane</button>
      </div>
  </form>
</div>

<script>
  const radioPerson = document.querySelector('.radio-person input');
  const radioCompany = document.querySelector('.radio-company input');
  const personInputsBox = document.getElementById('person-inputs-box');
  const companyInputsBox = document.getElementById('company-inputs-box');

  function toggleInputBoxes() {
    if (radioPerson.checked) {
      personInputsBox.style.display = 'flex';
      companyInputsBox.style.display = 'none';
    } else if (radioCompany.checked) {
      personInputsBox.style.display = 'none';
      companyInputsBox.style.display = 'flex';
    }
  }

  radioPerson.addEventListener('change', toggleInputBoxes);
  radioCompany.addEventListener('change', toggleInputBoxes);

  toggleInputBoxes();
</script>