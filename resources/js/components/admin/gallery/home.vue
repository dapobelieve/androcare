<template>
  <div>
    <div class="row">
      <div class="col-lg-12 mb-5">
        <button @click="go" type="button" class="btn btn-success">Add new</button>
      </div>
    </div>
    <div class="row el-element-overlay">
      <div v-for="x in 12" class="col-lg-3 col-md-6">
        <div class="card">
          <div class="el-card-item">
            <div class="el-card-avatar el-overlay-1">
              <img src="https://res.cloudinary.com/rohing/image/upload/v1585572497/harley-davidson-1HZcJjdtc9g-unsplash_vwslej.jpg" alt="user" />
              <div class="el-overlay">
                <ul class="list-style-none el-info">
                  <li class="el-item">
                    <a class="btn default btn-outline image-popup-vertical-fit el-link"  href="javascript:void(0);">
                      <i class="fas fa-edit"></i></a></li>
                  <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i
                    class="fas fa-trash-alt"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="el-card-content">
              <span class="text-muted">Caption 1</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
	props: ['create'],
	data () {
		return {

    }
  },
  methods: {
		go() {
			window.location.replace(`${this.create}`)
    }
  }
}
</script>