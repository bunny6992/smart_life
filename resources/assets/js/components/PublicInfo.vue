<script>
    export default {
         name: 'public-info',
        data: () => {
            return {
                pageNo: 0,
                personId: '',
                mode: '',
                addressInfo: {
                    sameAddress: 0,
                    noHome: 0,
                    current: {},
                    home: {}
                },
                basicInfo: {
                    noId: 0
                },
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
                this.saveAndNext(this.routes.basicInfo.next, this.addressInfo);
            },
            saveBasicInfo () {
                this.saveAndNext(this.routes.basicInfo.next, this.basicInfo);
            },
            saveEducationInfo () {
                this.saveAndNext(this.routes.educationInfo.next, this.educationInfo);
            },
             saveEmploymentInfo () {
                this.saveAndNext(this.routes.employmentInfo.next, this.employmentInfo);
            },
            saveHealthInfo () {
                this.saveAndNext(this.routes.healthInfo.next, this.healthInfo);
            },
            saveMoreInfo () {
                this.saveAndNext(this.routes.moreInfo.next, this.moreInfo);
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
                            if (response.data.person.id) {
                                this.personId =  response.data.person.id;
                            }
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