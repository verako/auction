@extends('admin.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Сообщения
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Админка</a></li>
        <li class="active">Сообщения</li>
      </ol>
    </section>
            <!-- Main content -->
    <section class="content">
              <div class="row">
                <div class="col-md-3">
                  <a href="/admin_compose" class="btn btn-primary btn-block margin-bottom">Написать</a>

                  <div class="box box-solid">
                    <div class="box-header with-border">
                      <h3 class="box-title">Папки</h3>

                      <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="box-body no-padding">
                      <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="#"><i class="fa fa-inbox"></i> Входящие
                            <span class="label label-primary pull-right">12</span></a></li>
                        <li class=""><a href="#"><i class="fa fa-bell-o"></i> Уведомления
                            <span class="label label-warning pull-right">2</span></a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i> Отправленные</a></li>
                        <li><a href="#"><i class="fa fa-trash-o"></i> Удаленные</a></li>
                      </ul>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Письмо</h3>

                      <div class="box-tools pull-right">
                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                        <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-read-info">
                        <h3>Message Subject Is Placed Here</h3>
                        <h5>From: help@example.com
                          <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
                      </div>
                      <!-- /.mailbox-read-info -->
                      <div class="mailbox-controls with-border text-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                            <i class="fa fa-trash-o"></i></button>
                          <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                            <i class="fa fa-reply"></i></button>
                          <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                            <i class="fa fa-share"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                          <i class="fa fa-print"></i></button>
                      </div>
                      <!-- /.mailbox-controls -->
                      <div class="mailbox-read-message">
                        <p>Hello John,</p>

                        <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                          on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                          master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                          gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                          asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                          blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                          Apparel.</p>

                        <p>Raw denim McSweeney's bicycle rights, iPhone trust fund quinoa Neutra VHS kale chips vegan PBR&amp;B
                          literally Thundercats +1. Forage tilde four dollar toast, banjo health goth paleo butcher. Four dollar
                          toast Brooklyn pour-over American Apparel sustainable, lumbersexual listicle gluten-free health goth
                          umami hoodie. Synth Echo Park bicycle rights DIY farm-to-table, retro kogi sriracha dreamcatcher PBR&amp;B
                          flannel hashtag irony Wes Anderson. Lumbersexual Williamsburg Helvetica next level. Cold-pressed
                          slow-carb pop-up normcore Thundercats Portland, cardigan literally meditation lumbersexual crucifix.
                          Wayfarers raw denim paleo Bushwick, keytar Helvetica scenester keffiyeh 8-bit irony mumblecore
                          whatever viral Truffaut.</p>

                        <p>Post-ironic shabby chic VHS, Marfa keytar flannel lomo try-hard keffiyeh cray. Actually fap fanny
                          pack yr artisan trust fund. High Life dreamcatcher church-key gentrify. Tumblr stumptown four dollar
                          toast vinyl, cold-pressed try-hard blog authentic keffiyeh Helvetica lo-fi tilde Intelligentsia. Lomo
                          locavore salvia bespoke, twee fixie paleo cliche brunch Schlitz blog McSweeney's messenger bag swag
                          slow-carb. Odd Future photo booth pork belly, you probably haven't heard of them actually tofu ennui
                          keffiyeh lo-fi Truffaut health goth. Narwhal sustainable retro disrupt.</p>

                        <p>Skateboard artisan letterpress before they sold out High Life messenger bag. Bitters chambray
                          leggings listicle, drinking vinegar chillwave synth. Fanny pack hoodie American Apparel twee. American
                          Apparel PBR listicle, salvia aesthetic occupy sustainable Neutra kogi. Organic synth Tumblr viral
                          plaid, shabby chic single-origin coffee Etsy 3 wolf moon slow-carb Schlitz roof party tousled squid
                          vinyl. Readymade next level literally trust fund. Distillery master cleanse migas, Vice sriracha
                          flannel chambray chia cronut.</p>

                        <p>Thanks,<br>Jane</p>
                      </div>
                      <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                    
                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                        <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                      </div>
                      <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                      <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                    </div>
                    <!-- /.box-footer -->
                  </div>
                  <!-- /. box -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
@endsection
