<template>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a
        class="navbar-brand"
        data-aos="zoom-in"
        data-aos-duration="1000"
        exact
        :to="{ name: 'home' }"
        >Faris Rizqilail</a
      >
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div
        class="collapse navbar-collapse justify-content-end"
        id="navbarNavAltMarkup"
      >
        <div class="navbar-nav">
          <li class="nav-link" data-aos="zoom-in" data-aos-duration="1500">
            <a class="nav-link" href="index.html">Beranda</a>
          </li>

          <li class="nav-link" data-aos="zoom-in" data-aos-duration="2000">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>

          <li class="nav-link" data-aos="zoom-in" data-aos-duration="2500">
            <a class="nav-link" href="portofolio.html">Portofolio</a>
          </li>
          <li class="nav-link" data-aos="zoom-in" data-aos-duration="3000">
            <a class="nav-link" href="kontak.html">Kontak</a>
          </li>
          <span
            data-aos="zoom-in"
            data-aos-duration="3500"
            class="icon"
            onclick="setDarkMode()"
            id="darkBtn"
          >
            🌓
          </span>
        </div>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
    data() {
      return {
        items: [
          {
            title: "Beranda",
            to: { name: "index" }
          },
          {
            title: "Inspire",
            icon: "lightbulb",
            to: { name: "inspire" }
          }
        ]
      };
    }
};
</script>
