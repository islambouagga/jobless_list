<template>
    <div class="container">
        <div class="row  justify-content-center mt-5">
            <div class="col-md-6">
                <img src='svg/Select_option.svg' width="500" height="400">
            </div>
            <div class="col-md-6">
                <h1 class="text-right">قائمة المسجلين</h1>
                <p class="text-right">
                    ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                    الخارجي
                    للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي
                    توزيعاَ
                    طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو
                    (أي
                    الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم
                    بشكل
                    إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                    العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق
                    الصدفة،
                    وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                </p>
            </div>
        </div>
        <div class="row ">

            <div class="col-12">
                <div class="card text-right">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>اسم و اللقب</th>
                                <th>رقم الهاتف</th>
                                <th>تاريخ الإزدياد</th>
                                <th>مكان الإقامة الحالية</th>
                                <th>مكتب التشغيل</th>
                                <th>التخصص</th>
                                <th>المستوى الدراسي</th>
                                <th> معلومات | قبول | رفض</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="candidate in candidates " :key="candidate.id" v-if="candidate.statu === null ">
                                <td>{{ candidate.name }}</td>
                                <td>{{ candidate.phone }}</td>
                                <td>{{ candidate.birthday }}</td>
                                <td>{{ candidate.district.name }}</td>
                                <td>{{ candidate.Anem }}</td>
                                <td>{{ candidate.field.title }}</td>
                                <td>{{ candidate.Study_level }}</td>
                                <td>
                                    <a class="btn " @click="showModal(candidate)">
                                        <i class="fas fa-file-alt Electromagnetic "></i>
                                    </a>
                                    |
                                    <a class="btn " @click="acceptcandidate(candidate)">
                                        <i class="fas fa-user-edit teal "></i>
                                    </a>
                                    |
                                    <a class="btn" @click="refusecandidate(candidate)">
                                        <i class="fas fa-times red "></i>
                                    </a>


                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- Modal Information-->
        <div class="modal fade" id="infotClt" tabindex="-1" aria-labelledby="infoCltLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg form-dark" role="document">
                <div class="modal-content text-right card card-image">
                    <div class=" rgba-stylish-strong px-5 z-depth-4">
                        <div class="modal-header text-center py-4 pb-4">
                            <h3 class="modal-title w-100 text-blue  font-weight-bold" id="myModalLabel"><strong>Details
                                de</strong>
                                <a class="text-test font-weight-bold"> <strong>Client </strong></a></h3>
                            <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body ">

                            <div class="row">
                                <div class="col">
                                    <label data-error="wrong" data-success="right" class="">اسم و اللقب : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.name }}</label>
                                    <br>
                                    <label data-error="wrong" data-success="right" class="text-uppercase">تاريخ
                                        الإزدياد : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.birthday }} </label>
                                    <br>
                                    <label data-error="wrong" data-success="right" class="text-uppercase">رقم الهاتف
                                        :</label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.phone }}</label>
                                    <br>
                                    <label data-error="wrong" data-success="right" class="text-uppercase">الايميل الخاص
                                        : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.email }}</label>
                                </div>
                                <div class="col">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">نسخة
                                        من بطاقة التعريف : </label>
                                    <img class="card-img-top zoom " width="200" height="200"
                                         :src="verification_card(candidate)" alt="Card image cap">
                                </div>
                            </div>
                            <hr style="border-top: 1px solid #d3d3d7; width:40%">


                            <div class="row">
                                <div class="col-md-6">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">التخصص
                                        : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidatetest.title }}</label>
                                </div>
                                <div class="col-md-6">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">المستوى
                                        الدراسي : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.Study_level }}</label>
                                </div>
                                <div class="col" v-show="candidate.Certificate != null">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">نسخة من
                                        الشهادة\ الديبلوم :</label>
                                    <img class="card-img-top zoom " width="200" height="200"
                                         :src="Certificate(candidate)" alt="Card image cap">
                                </div>

                            </div>
                            <hr style="border-top: 1px solid #d3d3d7; width:40%">

                            <div class="row">
                                <div class="col">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">مكان الإقامة
                                        الحالية : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ districttest.name }}</label>
                                </div>
                                <div class="col">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">البلدية
                                        : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ communetest.arabic_name }}</label>
                                </div>

                                <div class="col" v-show="candidate.Electricity_bill != null">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">نسخة من فاتورة
                                        الكهرباء\ الماء : </label>
                                    <img class="card-img-top zoom " width="200" height="200"
                                         :src="Electricity_bill(candidate)" alt="Card image cap">
                                </div>

                            </div>
                            <hr style="border-top: 1px solid #d3d3d7; width:40%">

                            <div class="row">
                                <div class="col">
                                    <label data-error="wrong" data-success="right" class="text-uppercase">رقم الوسيط
                                        : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.wassit }}</label>
                                    <br>
                                    <label data-error="wrong" data-success="right" class="text-uppercase">فرع مكتب
                                        التشغيل : </label>
                                    <label data-error="wrong" data-success="right"
                                           class="text-red ">{{ candidate.Anem }}</label>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Fermer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            ageAvvrage: null,
            candidates: {},
            candidateslist: null,
            communetest: {},
            candidatetest: {},
            districttest: {},
            candidate: new Form({
                id: '',
                name: '',
                email: '',
                phone: '',
                birthday: '',
                district_id: '',
                verification_card: '',
                commune: '',
                Electricity_bill: '',
                feild_id: '',
                Study_level: '',
                Certificate: '',
                wassit: '',
                Anem: '',
                statu: '',
            })
        }
    },
    methods: {
        showModal(candidate) {
            $('#infotClt').modal('show')
            // console.log(candidate.commune)
            this.candidate.fill(candidate);
            axios.get('api/communes/' + candidate.commune).then(({data}) => (this.communetest = data));
            axios.get('api/field/' + candidate.feild_id).then(({data}) => (this.candidatetest = data));
            axios.get('api/district/' + candidate.district_id).then(({data}) => (this.districttest = data));

        },
        loadCandidates() {
            axios.get('api/candidate').then(({data}) => (this.candidates = data,
            console.log(this.candidates)));

        },
        acceptcandidate(candidate) {
            this.candidate.fill(candidate);

            this.candidate.statu = "مقبول"
            this.candidate.put('api/candidate/' + this.candidate.id)
            Fire.$emit('AfterCreate');

        },
        refusecandidate(candidate) {
            this.candidate.fill(candidate);
            this.candidate.statu = "مرفوض"
            this.candidate.put('api/candidate/' + this.candidate.id)
            Fire.$emit('AfterCreate');
        },
        verification_card(candidate) {

            let photo = "files/" + candidate.name + "/" + candidate.verification_card;
            return photo;
        },
        Electricity_bill(candidate) {

            let photo = "files/" + candidate.name + "/" + candidate.Electricity_bill;

            return photo;
        },
        Certificate(candidate) {

            let photo = "files/" + candidate.name + "/" + candidate.Certificate;

            return photo;
        },
    },
    created() {
        this.loadCandidates();
        this.calculateAgeavverage();
        Fire.$on('AfterCreate', () => {
            this.loadCandidates();
        });
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
