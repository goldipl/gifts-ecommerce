<div class="container categories-tabs-swiper">

    <div class="d-flex flex-row justify-content-between items-center">
        <div class="d-flex flex-column py-4 mp-titles">
            <div class="d-flex flex-row mp-title">
                <h2 class="p-0">
                    KATEGORIE <small>Wybierz produkt dla siebie. Posiadamy az 52144 produktów do wyboru</small>
                </h2>
            </div>
        </div>
        <!-- Navigation Arrows for Tabs -->
        <div class="tab-nav-arrows">
            <button id="prevTabBtn">Previous</button>
            <button id="nextTabBtn">Next</button>
        </div>
    </div>

    <!-- Nav Tabs -->
    <ul class="nav nav-tabs" id="categoryTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab">Gadżety dla dzieci</button>
        </li>
        <li class="nav-item">
            <button class="nav-link" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab">Kubki i akcesoria</button>
        </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
            <?php include "./components/main_page/our_products_swiper.php"; ?>
        </div>

        <div class="tab-pane fade" id="tab2" role="tabpanel">
            <?php include "./components/main_page/our_products_swiper.php"; ?>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabButtons = Array.from(document.querySelectorAll('.nav-link'));
        const prevTabBtn = document.getElementById('prevTabBtn');
        const nextTabBtn = document.getElementById('nextTabBtn');

        let currentTabIndex = tabButtons.findIndex(tab => tab.classList.contains('active'));

        function updateTabNavigation() {
            prevTabBtn.disabled = currentTabIndex === 0;
            nextTabBtn.disabled = currentTabIndex === tabButtons.length - 1;
        }

        function switchTab(index) {
            if (index >= 0 && index < tabButtons.length) {
                tabButtons[index].click();
            }
        }

        prevTabBtn.addEventListener('click', () => switchTab(currentTabIndex - 1));
        nextTabBtn.addEventListener('click', () => switchTab(currentTabIndex + 1));

        tabButtons.forEach((tab, index) => {
            tab.addEventListener('shown.bs.tab', () => {
                currentTabIndex = index;
                updateTabNavigation();
            });
        });

        updateTabNavigation();
    });
</script>
