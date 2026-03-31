<?php
require_once __DIR__ . '/includes/functions.php';
$pageTitle = 'Корочки.есть — запись на программы дополнительного образования';
$metaDescription = 'Платформа для онлайн-записи на программы дополнительного образования: регистрация, заявка, личный кабинет и контроль статуса обучения.';
$metaKeywords = 'запись на курсы, дополнительное образование, подать заявку, онлайн кабинет, статус обучения';
$ogImage = 'assets/img/image06.jpg';
include __DIR__ . '/includes/header.php';
$courseList = courses();
$courseImages = ['image06.jpg', 'image08.webp', 'image11.jpg', 'image04.jpg', 'image17.jpeg'];
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "CollegeOrUniversity",
  "name": "Корочки.есть",
  "url": "https://example.local/korochki-est",
  "description": "Онлайн-площадка для подачи заявок на программы дополнительного образования.",
  "image": "assets/img/image06.jpg",
  "sameAs": ["https://vk.com/", "https://t.me/"],
  "potentialAction": {
    "@type": "ApplyAction",
    "target": "https://example.local/korochki-est/register.php"
  }
}
</script>

<section class="section hero-minimal">
  <div class="container hero-grid-red">
    <div class="hero-copy reveal show">
      <div class="kicker">единый сервис записи</div>
      <h1>Платформа, где заявка, старт обучения и история действий собраны в одном кабинете</h1>
      <p>Выберите программу, отправьте заявку за несколько минут и отслеживайте продвижение записи без звонков и бумажных анкет.</p>
      <div class="hero-actions">
        <?php if (!is_logged_in()): ?>
          <a class="btn btn-primary" href="register.php">Создать аккаунт</a>
          <a class="btn btn-secondary" href="login.php">Войти</a>
        <?php else: ?>
          <a class="btn btn-primary" href="create_application.php">Оформить заявку</a>
          <a class="btn btn-secondary" href="applications.php">Открыть кабинет</a>
        <?php endif; ?>
      </div>
      <div class="hero-note-line">
        <span>безопасный ввод данных</span>
        <span>актуальные статусы</span>
        <span>работа с телефона и ноутбука</span>
      </div>
    </div>
    <div class="hero-visual reveal show micro-float">
      <div class="hero-visual-card tall">
        <img src="assets/img/image06.jpg" alt="Компьютерный класс для занятий">
      </div>
      <div class="hero-mini-stack">
        <article class="hero-stat"><span>03 шага</span><strong>регистрация → заявка → сопровождение</strong></article>
        <article class="hero-stat alert"><span>личный кабинет</span><strong>все заявки и отзывы в одном месте</strong></article>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container split-feature-grid">
    <article class="slim-feature reveal">
      <span>для слушателя</span>
      <h3>Формы без лишних блоков</h3>
      <p>Страницы регистрации, входа и оформления заявки оставляют пользователя один на один с нужными полями.</p>
    </article>
    <article class="slim-feature reveal">
      <span>для администратора</span>
      <h3>Управление очередью заявок</h3>
      <p>Поиск, фильтры и смена статуса собраны в одной панели без перегруженного интерфейса.</p>
    </article>
    <article class="slim-feature reveal">
      <span>для публикации</span>
      <h3>Подготовлено для репоста</h3>
      <p>Главная страница дополнена метатегами и микроразметкой для корректного отображения в соцсетях.</p>
    </article>
  </div>
</section>

<section class="section section-accent">
  <div class="container section-head red-head">
    <div>
      <div class="kicker">направления обучения</div>
      <h2>Актуальные программы, доступные для записи</h2>
    </div>
    <p>После авторизации можно выбрать направление, дату старта и удобный способ оплаты. Все данные сразу попадают в систему обработки заявок.</p>
  </div>
  <div class="container course-grid-red">
    <?php foreach ($courseList as $index => $course): ?>
      <article class="course-card-min reveal" itemscope itemtype="https://schema.org/Course">
        <div class="course-image-wrap">
          <img src="assets/img/<?= e($courseImages[$index % count($courseImages)]) ?>" alt="Программа обучения">
        </div>
        <div class="course-card-body">
          <div class="course-row-top">
            <span class="chip chip-red">Программа</span>
            <strong><?= number_format($course['price'], 0, ',', ' ') ?> ₽</strong>
          </div>
          <h3 itemprop="name"><?= e($course['title']) ?></h3>
          <p itemprop="description"><?= e($course['description']) ?></p>
          <a class="text-link red-link" href="<?= is_logged_in() ? 'create_application.php' : 'register.php' ?>">Оформить запись</a>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container showcase-grid">
    <div class="showcase-copy reveal">
      <div class="kicker">пространство обучения</div>
      <h2>Современные аудитории и рабочие зоны</h2>
      <p>Витрина фотографий показывает несколько учебных помещений, в которых проходят занятия и консультирование слушателей.</p>
      <div class="showcase-points">
        <div><strong>01</strong><span>Аудитории для теории и практики</span></div>
        <div><strong>02</strong><span>Удобное сопровождение заявок онлайн</span></div>
        <div><strong>03</strong><span>Один сервис для слушателя и администратора</span></div>
      </div>
    </div>
    <div class="showcase-carousel reveal micro-sway">
      <div class="slides edge-slides" data-slider>
        <img src="assets/img/image08.webp" class="active" alt="Светлая аудитория">
        <img src="assets/img/image09.webp" alt="Компьютерный класс">
        <img src="assets/img/image10.webp" alt="Учебная комната">
        <img src="assets/img/image11.jpg" alt="Рабочее пространство центра">
      </div>
      <button class="slider-btn prev" type="button" data-prev>&larr;</button>
      <button class="slider-btn next" type="button" data-next>&rarr;</button>
    </div>
  </div>
</section>


<?php include __DIR__ . '/includes/footer.php'; ?>
