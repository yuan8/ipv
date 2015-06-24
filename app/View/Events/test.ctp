<?php
                        echo $this->Form->create('Article', array(
                          'url' => array('action' => 'search'),
                          'class' => 'input-group'
                        ));

                        echo $this->Form->input("keyword", array(
                          'div' => false,
                          "class" => "form-control",
                          'size' => 18,
                          "type" => "text",
                          "label" => false,
                          "placeholder" => "Cari Artikel...",
                          "value" => (!empty($this->params['url']['keyword']) ? $this->params['url']['keyword'] : '')
                        ));
                      ?>
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                      </span>
                      <?php echo $this->Form->end();?>