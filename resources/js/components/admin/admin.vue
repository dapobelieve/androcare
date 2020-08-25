<template>
  <div>
    <admin-nav />
    <div class="page-wrapper">
      <div class="page-breadcrumb">
        <div class="row">
          <div class="col-7 align-self-center">
            <div class="d-flex align-items-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html" class="link">Home</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
              </nav>
            </div>
            <h4 class="page-title">Dashboard</h4>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <router-view />
      </div>
      <footer class="footer text-center">
        Built by <a href="https://twitter.com/CodeDrogo" target="_blank">Dapo Believe</a>.
      </footer>
    </div>
  </div>
</template>

<script>
export default {
	components: {
		AdminNav: () => import('@/components/admin/parts/nav.vue')
  },
  created() {
	}
}
</script>