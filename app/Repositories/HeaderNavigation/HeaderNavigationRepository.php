<?php
namespace App\Repositories\HeaderNavigation;


use App\Models\HeaderNav;
use App\Repositories\BaseRepository;

class HeaderNavigationRepository extends BaseRepository implements HeaderNavigationRepositoryInterface
{
    /**
     * ClientBillingRepository constructor.
     *
     * @param HeaderNav $headerNav
     */
    public function __construct(HeaderNav $headerNav)
    {
        parent::__construct($headerNav);
        $this->model = $headerNav;
    }

    public function getHeaderNavigations(){
        return $this->getAllRecords();
    }
}
