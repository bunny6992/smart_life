<script>
    export default {
         name: 'public-info',
        data: () => {
            return {
                pageNo: 0,
                mode: '',
                addressInfo: {},
                basicInfo: {},
                educationInfo: {},
                employmentInfo: {},
                healthInfo: {},
                identityNumbers: {}
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            saveAddressInfo () {
                this.pageNo++;
            },
            saveBasicInfo () {
                this.pageNo++;
            },
            saveEducationInfo () {
                this.pageNo++;
            },
             saveEmploymentInfo () {
                this.pageNo++;
            },
            saveHealthInfo () {
                this.pageNo++;
            },
            saveIdentityNumbers () {
                this.pageNo++;
            }
        }
    }
</script>