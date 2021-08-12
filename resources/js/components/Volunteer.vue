<template>
    <div class="container">
        <div class="row  justify-content-center mt-5">
            <div class="col-md-6">
                <img src='svg/meet_the_team.svg' width="500" height="400">
            </div>
            <div class="col-md-6">
                <h1 class="text-right">قائمة المنسقين</h1>
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
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <div class="card-tools">
                                <div class="input-group-append">
                                <button class="btn btn-success" @click="showModal()"  >
                                  اضافة منسق  <i class="fa fa-user-plus fa-fw"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>اسم و اللقب</th>
                                <th>رقم الهاتف</th>
                                <th>الايميل</th>
                                <th>الحي</th>
                                <th> حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="volunteer in volunteers " :key="volunteer.id">
                                <td>{{ volunteer.users[0].name }}</td>
                                <td>{{ volunteer.users[0].phone }}</td>
                                <td>{{ volunteer.users[0].email }}</td>
                                <td>{{ volunteer.district.name }}</td>

                                <td>
                                    <a class="btn" @click="deleteVolunteer(volunteer.id)">
                                        <i class="fas fa-trash red "></i>
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

        <!-- Modal add-->
        <div class="modal fade" id="addNewInterv" tabindex="-1" aria-labelledby="addNewIntervLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg form-dark" role="document">
                <div class="modal-content card card-image">

                    <form @submit.prevent="addVolunteer">
                        <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
                            <div class="modal-header text-center pb-4">
                                <h3 class="modal-title w-100 font-weight-bold" id="addNewIntervLabel">
                                    <strong>Ajouter</strong>
                                    <a class="text-test font-weight-bold"> <strong>Intervenant </strong></a></h3>
                                <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body text-uppercase">

                                <div class="row">
                                    <div class="col text-right">
                                        <label data-error="wrong" data-success="right">اسم و اللقب</label>
                                        <input v-model="volunteer.name" placeholder="اسم و اللقب" type="text" id="name"
                                               name="name" class="form-control validate white-text">
                                        <div style="color:red;" v-if="volunteer.errors.has('name')"
                                             v-html="volunteer.errors.get('name')"/>
                                    </div>
                                    <div class="col text-right">
                                        <label data-error="wrong" data-success="right">رقم الهاتف</label>
                                        <input v-model="volunteer.phone" placeholder="رقم الهاتف" type="text"
                                               id="phone" name="phone" class="form-control validate white-text">
                                        <div style="color:red;" v-if="volunteer.errors.has('phone')"
                                             v-html="volunteer.errors.get('phone')"/>
                                    </div>
                                    <div class="col text-right">
                                        <label data-error="wrong" data-success="right">الحي</label>
                                        <select v-model="volunteer.district" class="form-control validate white-text">
                                            <option v-for="distric in districs" :key="distric.id" name="district"
                                                    :value="distric.id">{{ distric.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <hr style="border-top: 1px solid #d3d3d7; width:40%">
                                <div class="row">

                                        <div class="col-md-6 text-right">
                                            <label data-error="wrong" data-success="right">الايميل</label>
                                            <input v-model="volunteer.email" placeholder="الايميل"
                                                   type="email" id="email" name="email"
                                                   class="form-control validate white-text">
                                            <div style="color:red;" v-if="volunteer.errors.has('email')"
                                                 v-html="volunteer.errors.get('email')"/>
                                        </div>
                                        <br>

                                        <div class="col-md-6 text-right">
                                            <label data-error="wrong" data-success="right">كلمة السر</label>
                                            <input v-model="volunteer.password" placeholder="Mot de passe"
                                                   type="password" id="password" name="password"
                                                   class="form-control validate white-text">
                                            <div style="color:red;" v-if="volunteer.errors.has('كلمة السر')"
                                                 v-html="volunteer.errors.get('password')"/>
                                        </div>

                                </div>
                            </div>
                            <div class="modal-footer d-flex justify-content-between">
                                <button type="submit" class="btn btn-default btn-lg float-left"
                                        style="background-color: #FF6863; color: #ffffff">إرسال
                                </button>
                                <button type="submit" class="btn btn-default btn-lg">إلغاء</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {

            volunteers: {},
            districs: {},
            volunteer: new Form({
                id: '',
                name: '',
                email: '',
                phone: '',
                password: '',
                district: '',
            })
        }
    },
    methods: {
        showModal() {
            $('#addNewInterv').modal('show')
            // console.log(candidate.commune)


        },
        loadVolunteers() {
            axios.get('api/volunteer').then(({data}) => (this.volunteers = data,
                console.log(this.volunteers)));

        },
        loadDistricts(){
            axios.get('api/district').then(({data}) => (this.districs = data));
        },

        addVolunteer(){
            this.volunteer.post('/api/volunteer')
                .then(() => {
                    Fire.$emit('AfterCreate');
                    $('#addNewInterv').modal('hide');
                    this.volunteer.reset();
                })
                .catch(() => {
                    this.volunteer.reset();
                })
        },
        deleteVolunteer(id){
            this.volunteer.delete('api/volunteer/' + id)
                .then(() => {
                    Fire.$emit('AfterCreate');
                })
                .catch(() => {
                })
        },
    },
    created() {
        this.loadVolunteers();
        this.loadDistricts();
        Fire.$on('AfterCreate', () => {
            this.loadVolunteers();
            this.loadDistricts();
        });
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
