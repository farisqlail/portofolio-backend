<template>
    <div class="container">
        <section id="porto">
            <h2>
                Portofolio
            </h2>
            <br /><br />

            <div class="port">
                <a href="https://lug-surabaya.com/" class="text" target="blank">
                    <h3>Linux User Group</h3>
                </a>
                <span class="text-muted mt-1 mb-3">Deskripsi</span>
                <p class="mt-3">
                    Disini saya melakukan pengembangan website dalam bagian
                    frontend dan backend pada website ini dengan menggunakan
                    teknologi Laravel 7.
                </p>
            </div>
            <br />

            <div class="port">
                <a
                    href="https://github.com/faris110900/smpmuh-13"
                    class="text"
                    target="blank"
                >
                    <h3>SMP Muhammadiyah 13 Profile</h3>
                </a>
                <span class="text-muted mt-1 mb-3">Deskripsi</span>
                <p class="mt-3">
                    Disini saya melakukan pengembangan website profile dalam
                    bagian frontend dan backend pada website ini dengan
                    menggunakan teknologi Laravel 7.
                </p>
            </div>
            <br />

            <div class="port">
                <a
                    href="https://github.com/faris110900/covid"
                    class="text"
                    target="blank"
                >
                    <h3>Statistik Covid-19 diIndonesia REST API</h3>
                </a>
                <span class="text-muted mt-1 mb-3">Deskripsi</span>
                <p class="mt-3">
                    Disini saya melakukan pengembangan website mentracking data
                    penderita covid-19 yang ada diIndonesia dengan menngunakan
                    REST API dari
                    <a href="https://kawalcovid19.id/" class="text-muted"
                        >kawalcovid19</a
                    >
                </p>
            </div>
            <br />
        </section>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("View mounted.");
    }
};
</script>
