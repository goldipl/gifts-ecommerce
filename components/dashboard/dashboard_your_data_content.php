<div class="dashboard-main inputs">
  <h2>Twoje dane:</h2>
  <form class="db-inputs">
    <div class="db-inputs__left">
      <h3>Edytuj informacje o koncie</h3>
      <div class="input-slot">
        <label for="name">Imię *</label>
        <input class="form-input" type="text" name="name" id="name" placeholder="np. Krzysztof" required>
      </div>
      <div class="input-slot">
        <label for="surname">Nazwisko *</label>
        <input class="form-input" type="text" name="surname" id="surname" placeholder="Nowak" required>
      </div>
      <div class="input-slot">
        <label for="email">E-mail *</label>
        <input class="form-input" type="email" name="email" id="email" placeholder="krzysztof.nowak@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
      </div>
      <div class="buttons">
        <button class="white-btn">Zapisz</button>
      </div>
    </div>
    <div class="db-inputs__right">
      <label class="custom-checkbox-container"> Zmień hasło <input type="checkbox" class="custom_input">
        <span class="custom-checkbox-checkmark"></span>
      </label>
      <div class="input-slot">
        <label for="password">Aktualne hasło</label>
        <input class="form-input" type="password" name="password" id="password" placeholder="*************">
      </div>
      <div class="input-slot">
        <label for="repeat-password">Nowe hasło</label>
        <input class="form-input" type="password" name="repeat-password" id="repeat-password" placeholder="*************">
      </div>
      <div class="input-slot">
        <label for="new-password">Potwierdź nowe hasło</label>
        <input class="form-input" type="password" name="new-password" id="new-password" placeholder="*************">
      </div>
    </div>
  </form>
</div>