<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Services</h4>
          <h6 class="card-subtitle">All services you offer</h6>
          <div class="table-responsive mt-3">
            <table class="table">
              <thead>
              <tr>
                <th>#</th>
                <th>Service</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Role</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Deshmukh</td>
                <td>Prohaska</td>
                <td>@Genelia</td>
                <td>
                  <span class="label label-success"><a href="">Edit</a></span>
                  <span class="label label-danger"><a href="#">Delete</a></span>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "home",
  methods: {
		getAll() {

    }
  },
  mounted() {
  	this.getAll()
	}
}
</script>

<style scoped>

</style>