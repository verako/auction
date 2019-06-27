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
                  <a href="/admin_mailbox" class="btn btn-primary btn-block margin-bottom">Назад во входящие</a>

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
                      <h3 class="box-title">Compose New Message</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <div class="form-group">
                        <input class="form-control" placeholder="To:">
                      </div>
                      <div class="form-group">
                        <input class="form-control" placeholder="Subject:">
                      </div>
                      <div class="form-group">
                    <textarea id="compose-textarea" class="form-control" style="height: 300px">
                      <h1><u>Heading Of Message</u></h1>
                      <h4>Subheading</h4>
                      <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and I will give you a complete account of the system, and expound the actual teachings
                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                        but because occasionally circumstances occur in which toil and pain can procure him some great
                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                        except to obtain some advantage from it? But who has any right to find fault with a man who
                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                        blinded by desire, that they cannot foresee</p>
                      <ul>
                        <li>List item one</li>
                        <li>List item two</li>
                        <li>List item three</li>
                        <li>List item four</li>
                      </ul>
                      <p>Thank you,</p>
                      <p>John Doe</p>
                    </textarea>
                      </div>
                      <div class="form-group">
                        <div class="btn btn-default btn-file">
                          <i class="fa fa-paperclip"></i> Attachment
                          <input type="file" name="attachment">
                        </div>
                        <p class="help-block">Max. 32MB</p>
                      </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <div class="pull-right">
                        <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                      </div>
                      <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
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
