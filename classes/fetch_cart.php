<?php
    session_start();
    $total_item = 0;
    $output = '
    <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
    <div class="card card-blog card-plain">
      
    
    ';

    if(!empty($_SESSION['project_cart'])){
        foreach ($_SESSION['project_cart'] as $keys => $values) {
            $output .= '
            
              <div class="position-relative">
                <a class="d-block shadow-xl border-radius-xl">
                  <img src="'.$values['image'].'" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                </a>
              </div>
              <div class="card-body px-1 pb-0">
                <p class="text-gradient text-dark mb-2 text-sm">'.$values['date'].'</p>
                <a href="javascript:;">
                  <h5>
                  '.$values['post'].'
                  </h5>
                </a>
                <p class="mb-4 text-sm">
                '.$values['pdesc'].'
                </p>
                <div class="d-flex align-items-center justify-content-between">
                  <button type="button" id="'.$values['postid'].'" name="delete" class="btn btn-danger btn-sm mb-0">Delete Project</button>
                  
                </div>
              </div>
          
            ';
            $total_item = $total_item + 1;
        }
    }else{
        $output .= '
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
            <div class="card card-blog card-plain">
                <h1>You dont Have Project Reminders!!!</h1>
            </div>
        </div>
        ';
    }
    $output .= '</div>
    </div>';
    $data = array(
        'cart_details' => $output,
        'total_item' => $total_item
    );
    echo json_encode($data);
?>