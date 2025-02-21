<div class="cart_container step_one">
  <div class="cart-steps">
    <div class="cart-steps-slot active">
      <span>Twój koszyk</span>
    </div>
    <div class="cart-steps-divider">
      <img src="./assets/icons/cart/steps-grey-chevron-right.svg" alt="chevron" width="8" height="18">
    </div>
    <div class="cart-steps-slot">
      <span>Adres dostawy</span>
    </div>
    <div class="cart-steps-divider">
      <img src="./assets/icons/cart/steps-grey-chevron-right.svg" alt="chevron" width="8" height="18">
    </div>
    <div class="cart-steps-slot">
      <span>Płatność</span>
    </div>
  </div>
  <div class="container">
    <div class="cart-table_full_box d-flex flex-row">
      <div class="cart-table_box d-flex flex-column">
        <div class="cart-step-table-container">
          <table class="cart-products-table">
            <tbody>
              <tr>
                <th></th>
                <th>Produkt</th>
                <th>Cena katalogowa </th>
                <th>Cena zakupu</th>
                <th>Ilość</th>
                <th>Suma netto</th>
                <th>Edycja</th>
              </tr>
              <tr class="divider"></tr>
              <tr>
                <td>
                    <img class="product-img" src="./assets/img/cart/pen.jpg" alt="produkt" width="76" height="76">
                </td>
                <td>
                    <div class="product-description">
                        <strong>Klip do dokumentów</strong>
                        <span>Kod produktu KC2585-40</span>
                    </div>
                </td>
                <td></td>
                <td></td>
                <td>
                  <input type="number" name="product-quantity" id="product-quantity">
                </td>
                <td></td>
                <td>
                  <a class="delete-icon" href="#">
                    <img src="./assets/icons/cart/grey-delete-x-icon.svg" alt="delete" width="17" height="20">
                    <span>Usuń</span>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="bottom-cart-box-with-btn">
          <div class="bottom-cart-buttons">
            <a href="#" class="white-btn prev">
                <img src="./assets/icons/cart/back-left-black-chevron.svg" alt="arrow icon" width="10" height="10">
                <span>Kontynuuj zakupy</span> 
            </a>
          </div>
        </div>
      </div>
      <aside class="sumary_box">
        <div class="sumary_box--title">
          <p>Wartość produktów</p>
        </div>
        <div class="sumary_box--netto">
          <p class="netto-value">17,88 PLN</p>
          <p class="netto-text">Suma netto</p>
        </div>
        <div class="sumary_box--brutto">
          <p class="brutto-value">21,99 PLN</p>
          <p class="brutto-text">Suma brutto</p>
        </div>
      </aside>
    </div>
  </div>
</div>