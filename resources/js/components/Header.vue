<template>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BOOLPRESS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <router-link class="nav-link" :to="{name:'home'}">HOME</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{name:'blog'}">BLOG</router-link>
        </li>
        <li class="nav-item">
          <router-link class="nav-link" :to="{name:'about'}">ABOUT</router-link>
        </li>
        
      </ul>
      
    </div>
  </div>
</nav>
  </header>
</template>

<script>
export default {
 name:'Header'
}
</script>

<style lang="scss">

</style>