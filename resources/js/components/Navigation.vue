<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <router-link
                        class="nav-link"
                        aria-current="page"
                        exact
                        :to="{ name: 'home' }"
                        >Faris</router-link
                    >
                </a>
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
                        <li class="nav-link">
                            <router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'pages.blog' }"
                                >Blog</router-link
                            >
                        </li>

                        <li class="nav-link">
                            <router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'pages.portofolio' }"
                                >Portofolio</router-link
                            >
                        </li>
                        <li class="nav-link">
                            <router-link
                                class="nav-link"
                                aria-current="page"
                                exact
                                :to="{ name: 'pages.kontak' }"
                                >Kontak</router-link
                            >
                        </li>
                        <span class="icon" onclick="setDarkMode()" id="darkBtn">
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
