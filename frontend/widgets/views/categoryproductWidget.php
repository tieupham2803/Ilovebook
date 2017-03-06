<?php 
use frontend\models\Category;
 ?>
<h2>Danh Mục</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        <?php 
                            foreach ($dataParent as $key => $value) {
                         ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $value["slug"]; ?>">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                            <?php echo $value["name"]; ?>  
                                        </a>
                                    </h4>
                                </div>
                                <?php 
                                    $dataSub = new Category();
                                    $dataSub = $dataSub->getCategoryBy($value['id']);
                                    if($dataSub){
                                 ?>
                                <div id="<?php echo $value["slug"]; ?>" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                        <?php foreach ($dataSub as $valueSub): ?>
                                            
                                      
                                            <li><a href="<?php echo Yii::$app->homeUrl."?r=book%2Flistbycat&id=".$valueSub["id"]; ?>"><?= $valueSub["name"] ?> </a></li>
                                              <?php endforeach ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div><!--/category-products-->