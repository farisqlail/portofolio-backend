<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" data-aos="zoom-in" data-aos-duration="1000" exact :to="{ name: 'home' }">Faris Rizqilail</a>
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
                            <router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'home' }"
                                >Beranda</router-link>
                        </li>

                        <li class="nav-link" data-aos="zoom-in" data-aos-duration="2000">
                            <router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'blog' }"
                                >Blog</router-link>
                        </li>

                        <li class="nav-link" data-aos="zoom-in" data-aos-duration="2500"
                            ><router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'portofolio' }"
                                >Portofolio</router-link
                            ></li
                        >
                        <li class="nav-link" data-aos="zoom-in" data-aos-duration="3000">
                            <router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'kontak' }"
                                >Kontak</router-link
                            >
                        </li>
                        <span data-aos="zoom-in" data-aos-duration="3500" class="icon" onclick="setDarkMode()" id="darkBtn">
                            🌓
                        </span>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    }
};
</script>
