<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-info">
          <h4 class="mb-0 text-white">Edit article</h4>
        </div>
        <form action="#">
          <div class="form-body">
            <div class="card-body">
              <div class="row pt-3">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Title:</label>
                    <input v-model="form.title" type="text" id="firstName" class="form-control" placeholder="">
                    <small class="form-control-feedback"></small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">{{ uploadNewImage != true ? 'Current display Image' : 'Select Display Image'}}:</label>
                    <small style="cursor: pointer; color: forestgreen">
                      <strong @click="uploadNewImage = !uploadNewImage">{{uploadNewImage != true ? 'Upload a new image' : 'cancel'}}</strong>
                    </small>
                    <div v-if="prevImage && !uploadNewImage" style="height: 210px; width: 100%">
                      <img style="height: 100%; width:100%; object-fit: cover" :src="prevImage" alt="">
                    </div>
                    <template v-if="uploadNewImage">
                      <vue-dropzone
                        @vdropzone-drag-drop="image = $event"
                        @vdropzone-file-added="image = $event"
                        ref="myVueDropzone"
                        id="dropzone"
                        :options="dropzoneOptions"
                      ></vue-dropzone>
                    </template>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <br>
              <!--/row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group has-success">
                    <label class="control-label">Service Details</label>
                    <div style="height: 500px" ref="editor"></div>
                    <!--<small class="form-control-feedback"> Select your gender</small>-->
                  </div>
                </div>
              </div>

            </div>
            <hr>
            <div class="form-actions">
              <div class="card-body">
                <button :disabled="btn.state" @click.prevent="processForm" type="submit" class="btn btn-success"><i class="fa fa-check"></i>
                  Update
                </button>
                <button type="button" class="btn btn-dark">Cancel</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
	import UploadMixin  from "@/mixins/UploadMixin.js";
	import Quill from "quill";
	export default {
		name: "article-edit",
		props: ['redirect', 'model'],
		mixins: [UploadMixin],
		data() {
			return {
				image: null,
				uploadNewImage: false,
				prevImage: null,
				btn: {
					state: false
				},
				form: {},
				editor: "",
			}
		},
		mounted () {
			let options = {
				placeholder: "",
				theme: "snow",
				modules: {
					toolbar: {
						container: [
							[{ header: [1, 2, 3, 4, 5, false] }],
							["bold", "italic", "underline", "strike"],
							["blockquote", "code-block"],
							["image", "code-block"],
							[{ header: 1 }, { header: 2 }],
							[{ list: "ordered" }, { list: "bullet" }],
							[{ script: "sub" }, { script: "super" }],
							[{ indent: "-1" }, { indent: "+1" }],
						],
					},
				},
			};
			this.editor = new Quill(this.$refs.editor, options);
			this.getModel()
			this.editor.getModule('toolbar').addHandler('image', () => {
				this.imageHandler();
			})
		},
		methods: {
			async getModel() {
				try {
					let res = await axios.get(`api/article/${this.model}`);
					let { id, title, body, images, richBody } = res.data.data
					this.form = { id, title, body, images, richBody }
					this.editor.clipboard.dangerouslyPasteHTML(richBody)
					if(images.length > 0) {
						this.prevImage = images[0].url
					}
				}catch (err) {
					throw new Error(err)
				}
			},
			async imageHandler() {
				const input = document.createElement('input')
				input.setAttribute('type', 'file')
				input.click();

				input.onchange = async () => {
					const file = input.files[0]
					if (/^image\//.test(file.type)) {
						let res = await this.uploadFile(file, "androcare/editor")

						//insert to editor
						const range = this.editor.getSelection();
						this.editor.insertEmbed(range.index, 'image', res.secure_url)
					}else {
						console.warn('You can only upload images')
					}
				}
			},
			async processForm() {
				// this.btn.state = true
				this.form.richBody = this.$refs.editor.innerHTML;
				this.form.body = this.$refs.editor.innerText;

				if (typeof this.form.title == "undefined" || this.form.body === "") {
					alert ("Please fill all fields")
					// this.btn.state = false
				}

				// if image has already been uploaded and some error occurred
				if(this.image !== null && typeof(this.form.imageData) == 'undefined') {
					this.form.imageData = await this.uploadFile(this.image, "androcare/articles")
				}

				this.update()
			},
			async update() {
				let res = await axios.put(`api/article/${this.form.id}`, this.form)
				console.log(res)
				if(res.status == 204) {
					alert("Article updated successfully")
					window.location.replace(`${this.redirect}?edit=true`)
				}
			}
		},
	}
</script>

<style scoped>
  .ql-editor {
    font-size: 18px !important;
  }
</style>