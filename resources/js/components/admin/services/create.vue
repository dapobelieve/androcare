<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-info">
          <h4 class="mb-0 text-white">Add a new service</h4>
        </div>
        <form action="#">
          <div class="form-body">
            <div class="card-body">
              <div class="row pt-3">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Service Name</label>
                    <input v-model="form.title" type="text" id="firstName" class="form-control" placeholder="GENDER SELECTION, SPERM BANKING etc">
                    <small class="form-control-feedback"></small>
                  </div>
                </div>
                <!--/span-->
                <!--/span-->
              </div>
              <!--/row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group has-success">
                    <label class="control-label">Service Details</label>
                    <div style="height: 600px" ref="editor"></div>
<!--                    <small class="form-control-feedback"> Select your gender</small>-->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group has-success">
                    <label class="control-label">Service Display Image</label>
                    <vue-dropzone
                      @vdropzone-drag-drop="image = $event"
                      @vdropzone-file-added="image = $event"
                      ref="myVueDropzone"
                      id="dropzone"
                      :options="dropzoneOptions"
                    ></vue-dropzone>
                    <!--                    <small class="form-control-feedback"> Select your gender</small>-->
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="form-actions">
              <div class="card-body">
                <button @click.prevent="submit" type="submit" class="btn btn-success"><i class="fa fa-check"></i>
                  Save
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
  name: "service-create",
  mixins: [UploadMixin],
  data() {
    return {
    	image: null,
    	form: {},
      editor: "",
    }
  },
  mounted () {
    let options = {
      // debug: "info",
      placeholder: "Be as descriptive as possible, give all details of this service",
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
    this.editor.getModule('toolbar').addHandler('image', () => {
    	this.imageHandler();
    })

  },
  methods: {
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
    async saveEditorImageToCloud() {

    },
		async submit() {
			this.form.richBody = this.$refs.editor.innerHTML;
			this.form.body = this.$refs.editor.innerText;
			// if (typeof this.form.title == "undefined" || this.form.body == "" || this.form.image == "") {
			// 	alert ("Please fill all fields")
      // }

      // if image has already been uploaded and some error occured
			if(typeof(this.form.imageData) == 'undefined') {
				this.form.imageData = await this.uploadFile(this.image, "androcare/service")
      }
      // delete this.form.image

      // if(!this.form.imageData) {
				let res = await axios.post('api/service', this.form)
      // }
		},
	}
}
</script>

<style scoped>

</style>