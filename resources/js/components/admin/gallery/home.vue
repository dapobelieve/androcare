<template>
  <div>
    <div class="row">
      <div class="col-lg-12 mb-5">
        <button @click="go" type="button" class="btn btn-success">Add new</button>
      </div>
    </div>
    <div class="row el-element-overlay">
      <div v-if="gallery.length > 0" v-for="x in gallery" class="col-lg-3 col-md-6">
        <div class="card">
          <div class="el-card-item">
            <div class="el-card-avatar el-overlay-1">
              <img style="height: 300px; width: 300px; object-fit: cover" :src="x.images[0]['url']" alt="user" />
              <div class="el-overlay">
                <ul class="list-style-none el-info">
                  <li class="el-item">
                    <a class="btn default btn-outline image-popup-vertical-fit el-link"  href="javascript:void(0);">
                      <i class="fas fa-edit"></i></a></li>
                  <li class="el-item">
                    <a class="btn default btn-outline el-link" @click.prevent="deleteImage(x)" href="">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="el-card-content">
              <span class="text-muted">{{x.caption}}</span>
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
      gallery: []
    }
  },
  methods: {
		async getAll() {
			let res = await window.axios.get('api/gallery');
			this.gallery = res.data.data
    },
    async deleteImage (image) {
			if(confirm("Are you sure you want to delete this image")) {
				let res = await axios.delete(`gallery/${image.id}`)
      }
    },
		go() {
			window.location.replace(`${this.create}`)
    }
  },
  created() {
		this.getAll()
	}
}
</script>