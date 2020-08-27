<template>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Articles</h4>
          <div class="table-responsive mt-3">
            <table class="table">
              <thead>
              <tr>
                <th>#</th>
                <th>Service</th>
                <th>actions</th>
              </tr>
              </thead>
              <tbody>
              <tr v-for="(data, index) in arrs" :key="data.id">
                <td>{{index+1}}</td>
                <td>{{ data.title }}</td>
                <td>
                  <span @click="edit(data.id)" class="label label-success cursor-pointer">Edit</span>
                  <span @click="deleteService(data.id)" class="label label-danger cursor-pointer">Delete</span>
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
		props: ['editUrl'],
		data () {
			return {
				arrs: []
			}
		},
		methods: {
			async getAll() {
				let res = await axios.get('api/articles');
				this.arrs = res.data.data
			},
			edit(id) {
				window.location = `${this.editUrl}/${id}`;
			},
			async deleteService(id) {
				if(confirm("Are you sure you want to delete this record?")) {
					let res = await axios.delete(`api/article/${id}`)
          console.log(res)
				}
			}
		},
		mounted() {
			this.getAll()
		}
	}
</script>

<style scoped>
  .cursor-pointer {
    cursor: pointer
  }
</style>