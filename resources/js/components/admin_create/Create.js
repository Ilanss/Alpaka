
export default {
    props: ['wineries', 'categories', 'countries'],
    data() {
        return {
            fields: {
                stock_status: true,
                image: ''
            },
            errors: {},
            success: false,
            loaded: true,
        }
    },
    methods: {
        upload() {
            e.preventDefault();
            var files = this.$$.image.files;
            var data = new FormData();
            // for single file
            data.append('image', files[0]);
            // Or for multiple files you can also do
            //  _.each(files, function(v, k){
            //    data.append('avatars['+k+']', v);
            // });
        },
        onImageChange(e) {
            console.log(e.target.files[0]);
            this.image = e.target.files[0];
        },
        submit() {

            const formData = new FormData();

            
            for (let key in this.fields) {
                formData.append('image', this.image);
                formData.set(key, this.fields[key]);
            }
            const config = {
                headers: { 'content-type': 'multipart/form-data' }
            }
            console.log("hello", this.fields)
            this.errors = {};
            axios.post('/public/products', formData, config).then(response => {
                alert('Message sent!');
            }).catch(error => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors || {};
                }
            });
        },
    },
}