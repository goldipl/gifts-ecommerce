<div class="container">
  <div class="cart-table_full_box d-flex flex-row">
    <div class="cart-table_box d-flex flex-column">
      <div class="cart-step-table-container">
        <table class="cart-products-table">
          <tbody>
            <tr>
              <th>Nr</th>
              <th>Produkt</th>
              <th>Cena katalogowa </th>
              <th>Cena zakupu</th>
              <th>Ilość</th>
              <th>Suma netto</th>
              <th>Edycja</th>
            </tr>
            <tr class="divider"></tr>
            <div class="cart-table-slot">
              <tr>
                <td class="number">01</td>
                <td>
                  <div class="d-flex">
                    <img class="product-img" src="./assets/img/cart/pen.jpg" alt="produkt" width="76" height="76">
                    <div class="product-description ms-3">
                      <strong>Klip do dokumentów</strong>
                      <span>Kod produktu KC2585-40</span>
                    </div>
                  </div>
                </td>
                <td>2,16 PLN</td>
                <td>0,88 PLN</td>
                <td>
                  <input type="number" name="product-quantity" id="product-quantity" min="0">
                </td>
                <td>45,36 PLN</td>
                <td>
                  <a class="delete-icon" href="#">
                    <img src="./assets/icons/cart/grey-delete-x-icon.svg" alt="delete" width="10" height="10">
                    <span>Usuń</span>
                  </a>
                </td>
              </tr>
              <tr class="cart-branding-expand-row">
                <td></td>
                <td colspan="4" class="branding-text">
                  <strong>Znakowanie:</strong>
                  <span>(Metoda znakowania: <b>Sitodruk</b> | Ilość kolorów nadruku: <b>1</b> | Pozycja nadruku: <b>Przód</b> | Ilość: <b>11</b>) </span>
                </td>
                <td colspan="2">
                  <div class="expand">
                    <span>Rozwiń znakowanie</span>
                    <img src="./assets/icons/cart/expand-arrow-down.svg" alt="rozwiń" width="18" height="18">
                  </div>
                </td>
              </tr>
              <tr class="cart-branding-expand-content">
                <td></td>
                <td>
                  <div class="product-brandings">
                    <div class="product-brandings__slot">
                      <label for="select-branding">Znakowanie:</label>
                      <select class="form-select" name="select-branding" id="select-branding">
                        <option value="Sitodruk">Sitodruk</option>
                        <option value="Sitodruk">Sitodruk</option>
                      </select>
                    </div>
                    <div class="product-brandings__slot">
                      <label for="select-position">Pozycja:</label>
                      <select class="form-select" name="select-position" id="select-position">
                        <option value="Przód">Przód</option>
                        <option value="Tył">Tył</option>
                      </select>
                    </div>
                    <div class="product-brandings__slot">
                      <label for="select-colors">Ilość kolorów:</label>
                      <select class="form-select" name="select-colors" id="select-colors">
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                  </div>
                </td>
                <td>2,16 PLN</td>
                <td>3,16 PLN</td>
                <td>
                  <input type="number" name="product-quantity" id="product-quantity" min="0">
                </td>
                <td>34,76 PLN</td>
                <td>
                  <a class="delete-icon" href="#">
                    <img src="./assets/icons/cart/grey-delete-x-icon.svg" alt="delete" width="10" height="10">
                    <span>Usuń</span>
                  </a>
                </td>
              </tr>
              <tr class="summary">
                <td></td>
                <td colspan="6">
                  <div class="summary-cart-box">
                    <p class="summary-title">Podsumowanie</p>
                    <div class="summary-files-box">
                      <div class="summary-files-box__left">
                        <span>Wgraj pliki:</span>
                        <label for="files" class="add-files" id="add-files">
                          <div class="files-top">
                            <img class="add-files-img" src="./assets/icons/cart/upload-icon.svg" alt="upload" width="31" height="21">
                            <p class="add-files-text">Przeciągnij i upuść albo <u>Dodaj plik</u>
                            </p>
                          </div>
                          <div class="files-btn">
                            <input class="file file-block" type="file" name="product_photo" id="files">
                          </div>
                          <small>Wymagamy plik w wektorach format pliku pdf zapisany w krzywych (czcionka i kontury)</small>
                        </label>
                      </div>
                      <div class="summary-files-box__right">
                        <div class="right-summary__price-text">
                          <span>Cena:</span>
                        </div>
                        <div class="right-summary__price-value">
                          <span>80,12 PLN</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </div>
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
    <aside class="summary-aside">
      <div class="summary-box">
        <div class="summary-box__title">
          <p>Twoje zamówienie</p>
        </div>
        <div class="summary-box__netto">
          <p>Cena zamówienia netto: 95,72 PLN</p>
        </div>
        <div class="summary-box__delivery">
          <p>Koszt dostawy netto: 20,00 PLN</p>
        </div>
        <div class="summary-box__full-price">
          <p>Cena zamówienia z dostawą brutto</p>
          <strong>do zapłaty</strong>
          <span class="green">100,12 PLN</span>
          <a href="" class="color-btn">
            <span>Dalej</span>
            <img src="./assets/icons/product_page/cart.svg" alt="koszyk" width="17" height="17">
          </a>
        </div>
      </div>
      <div class="discount-box">
        <p>Masz kod rabatowy?</p>
        <div class="discount-row-box">
          <input type="text" name="discount-input" id="discount-input" placeholder="Wpisz tutaj">
          <button class="discount-btn">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.75 0C9.04008 0 9.31828 0.115234 9.5234 0.320352C9.72852 0.52547 9.84375 0.803669 9.84375 1.09375V7.65625H16.4062C16.6963 7.65625 16.9745 7.77148 17.1796 7.9766C17.3848 8.18172 17.5 8.45992 17.5 8.75C17.5 9.04008 17.3848 9.31828 17.1796 9.5234C16.9745 9.72852 16.6963 9.84375 16.4062 9.84375H9.84375V16.4062C9.84375 16.6963 9.72852 16.9745 9.5234 17.1796C9.31828 17.3848 9.04008 17.5 8.75 17.5C8.45992 17.5 8.18172 17.3848 7.9766 17.1796C7.77148 16.9745 7.65625 16.6963 7.65625 16.4062V9.84375H1.09375C0.803669 9.84375 0.52547 9.72852 0.320352 9.5234C0.115234 9.31828 0 9.04008 0 8.75C0 8.45992 0.115234 8.18172 0.320352 7.9766C0.52547 7.77148 0.803669 7.65625 1.09375 7.65625H7.65625V1.09375C7.65625 0.803669 7.77148 0.52547 7.9766 0.320352C8.18172 0.115234 8.45992 0 8.75 0Z" fill="#2F2C24" />
            </svg>
          </button>
        </div>
      </div>
    </aside>
  </div>
</div>