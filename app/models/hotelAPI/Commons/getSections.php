<?php

namespace App\models\hotelAPI\Commons;

class getSections
{

    /**
     * @var GetSectionsRQ $GetSectionsRQ_1
     */
    protected $GetSectionsRQ_1 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GetSectionsRQ
     */
    public function getGetSectionsRQ_1()
    {
      return $this->GetSectionsRQ_1;
    }

    /**
     * @param GetSectionsRQ $GetSectionsRQ_1
     * @return \App\models\hotelAPI\Commons\getSections
     */
    public function setGetSectionsRQ_1($GetSectionsRQ_1)
    {
      $this->GetSectionsRQ_1 = $GetSectionsRQ_1;
      return $this;
    }

}
