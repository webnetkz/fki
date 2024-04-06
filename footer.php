
    <section id="feedback">
        <div>
            <h4>Ответим на любой вопрос</h4>
            <form method="POST" onsubmit="isSendForm(event)">
                <div class="inputs">
                    <input type="text" name="name" placeholder="ИМЯ" required>
                    <input type="tel" name="phone" placeholder="ТЕЛЕФОН" required>
                </div>
                <div class="social-container">
                    <div class="textarea">
                        <textarea name="message" placeholder="Вопрос по ковке, дизайну и др." rows="5"></textarea>
                    </div>
                    <div class="social-of-form">
                        <img src="./public/img/icons/whatsapp.png" alt="whatsapp" onclick="location.href='https://api.whatsapp.com/send/?phone=77074486128&text&type=phone_number&app_absent=0'">
                        <img src="./public/img/icons/instagram.png" alt="instagram" onclick="location.href='https://www.instagram.com/fki.kz/'">
                        <img src="./public/img/icons/youtube.svg" alt="youtube" onclick="location.href='https://www.youtube.com/channel/UCxxw9p6sq_GDHY78vyZWWEA'">
                    </div>

                </div>
                <div class="submit">
                    <button>Отправить</button>
                </div>
            </form>
        </div>
    </section>
    <iframe
        frameborder="0"
        width="100%"
        height="500"
        title="google map"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2905.09710792712!2d76.88033897580655!3d43.270341371122825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836b13e2d60c35%3A0x70b6d256f9529cbd!2z0KTQsNCx0YDQuNC60LAg0LrQvtCy0LDQvdGL0LUg0LjQt9C00LXQu9C40Y8uINCa0L7QstC60LA!5e0!3m2!1sru!2skz!4v1699788553955!5m2!1sru!2skz"
        style="
            border: 0;
            margin-top: 50px;
        "
        allowfullscreen>
    </iframe>

    <footer>
        <!-- <a href="price_2024.xls" download>
            <button>
                Скачать прайс
            </button>
        </a> -->
        <span class="copyright">
            <a href="https://fki.kz">
                <b>«Фабрика кованых изделий»</b>
                1997-<?=date('Y')?> <small>Copyright ©</small>
            </a>
        </span>
    </footer>

    <script src="./public/js/main.js"></script>
    <script src="./public/js/feedback.js"></script>
</body>
</html>