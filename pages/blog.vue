<template>
  <div class="container">
    <section id="blog">
      <h2>
        Artikel
      </h2>
      <br /><br />

      <h3 v-for="(blog, index) in blogs" :key="blog">
        <nuxt-link :to="blog.fields.slug">{{ blog.fields.title }}</nuxt-link>
      </h3>
    </section>
  </div>
</template>

<script>
export default {};
</script>
