import vue2Dropzone from "vue2-dropzone";
import "vue2-dropzone/dist/vue2Dropzone.min.css";
import axios from "axios";
export default  {
  data () {
    return {
      cloudinary: {
        name: "rohing",
      },
      dropzoneOptions: {
        url: "https://api.lms.com/upload",
        thumbnailWidth: 100,
        thumbnailHeight: 100,
        maxFilesize: 3,
        uploadMultiple: false,
        addRemoveLinks: true,
        maxFiles: 1,
        acceptedFiles: 'image/*',
        autoProcessQueue: false,
        headers: { "My-Awesome-Header": "header value" },
      },
    };
  },
  methods: {
    async uploadFile(file, folder='androcare') {
      const formData = new FormData();
      formData.append("file", file);
      formData.append("upload_preset", "default_preset");
      formData.append("folder", folder)
      const endpoint = `https://api.cloudinary.com/v1_1/${this.cloudinary.name}/image/upload`;
      try {
        const res = await axios.post(endpoint, formData, {
          headers: {
            "content-type": "multipart/form-data",
          },
        });

        if (res.status == 200) {
          let { secure_url, public_id } = res.data
          return {secure_url, public_id};
        }else {
          return false
        }
      } catch (e) {
        console.log(e);
      }
    }
  },
  components: {
    vueDropzone: vue2Dropzone,
  },
};