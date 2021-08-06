<template>
    <div class="container">
        <div class="row  justify-content-center mt-5">
            <div class="col-md-6">
                <img src='svg/fill_form.svg' width="500" height="400">
            </div>
            <div class="col-md-6">
                <h1 class="text-right">استمارة</h1>
                <p class="text-right">
                    ناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي
                    للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ
                    طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي
                    الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل
                    إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة
                    العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة،
                    وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                </p>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>اسم و اللقب</th>
                                <th>رقم الهاتف</th>
                                <th>الايميل الخاص</th>
                                <th>تاريخ الإزدياد</th>
                                <th>مكان الازدياد</th>
                                <th>نسخة من بطاقة التعريف </th>
                                <th>مكان الإقامة الحالية</th>
                                <th>البلدية</th>
                                <th>نسخة من فاتورة الكهرباء\ الماء</th>
                                <th>التخصص</th>
                                <th>المستوى الدراسي</th>
                                <th>نسخة من الشهادة\ الديبلوم</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="candidate in candidates " :key="candidate.id">
                                <td>{{ candidate.name }}</td>
                                <td>{{ candidate.phone }}</td>
                                <td>{{ candidate.email }}</td>
                                <td>{{ candidate.birthday }}</td>
                                <td>{{ candidate.birthplace }}</td>
                                <td>{{ candidate.verification_card }}</td>
                                <td>{{ candidate.residence }}</td>
                                <td>{{ candidate.commune }}</td>
                                <td>{{ candidate.Electricity_bill }}</td>
                                <td>{{ candidate.field }}</td>
                                <td>{{ candidate.Study_level }}</td>
                                <td>{{ candidate.Certificate }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                candidates: {},
            }
        },
        methods: {
            loadCandidates() {
                axios.get('api/candidate').then(({data}) => (this.candidates = data));
            },
        },
        created() {
            this.loadCandidates();

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
