<script>
    export default {
         name: 'public-info',
        data: () => {
            return {
                pageNo: 0,
                personId: '',
                mode: '',
                addressInfo: {},
                basicInfo: {},
                educationInfo: {},
                employmentInfo: {},
                healthInfo: {},
                moreInfo: {},
                routes: {}
            }
        },
        mounted() {
            this.routes = {
                basicInfo: {
                    next: "more-info"
                },
                moreInfo: {
                    next: "address-info",
                    prev: "basic-info"
                },
                addressInfo: {
                    next: "education-info",
                    prev: "more-info"
                },
                educationInfo: {
                    next: "employment-info",
                    prev: "address-info"
                },
                employmentInfo: {
                    next: "health-info",
                    prev: "education-info"
                },
                healthInfo: {
                    prev: "employment-info"
                }
            };

        },
        methods: {
            saveAddressInfo () {
                this.pageNo++;
            },
            saveBasicInfo () {
                this.saveAndNext(this.routes.basicInfo.next, this.basicInfo);
            },
            saveEducationInfo () {
                this.saveAndNext(this.routes.educationInfo.next);
            },
             saveEmploymentInfo () {
                this.saveAndNext(this.routes.employmentInfo.next);
            },
            saveHealthInfo () {
                this.saveAndNext(this.routes.healthInfo.next);
            },
            saveMoreInfo () {
                this.saveAndNext(this.routes.moreInfo.next);
            },

            saveAndNext (hash, data) {
                $.validate({
                    lang: 'en'
                });
                setTimeout( () => {
                    var error = false;
                    $(".form-group").each(function( index ) {
                      if($( this ).hasClass('has-error')){
                        error = true;
                      }
                    });
                    if (!error) {
                        this.saveData(hash, data);
                    }
                }, 100);
            },

            saveData (hash, data) {
                data.pageNo = this.pageNo;
                data.personId = this.personId;
                axios.post('/saveData', data)
                    .then((response) => {
                        if (response.data.success) {
                            this.personId =  response.data.person.id;
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                // this.pageNo++;
                // window.location.hash = hash;
            }
        }
    }
</script>