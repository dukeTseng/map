<?php

namespace Duke\Map;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class Map
{
    /*
     * 找地點到位置
     */
    public function address($userWhere)
    {
        $where = ($userWhere == null) ? '中佑集團' : $userWhere;
        $result = Mapper::location($where);
        Mapper::map (
        $result->getLatitude(),
        $result->getLongitude(),
        [
            'zoom' => 16,
            'draggable' => true,
            'marker' => true,
            'eventAfterLoad' => 
            'circleListener(maps[0].shapes[0].circle_0);'
        ]
        );
        print '<div style="height: 800px; width: 1500px;">';
        print Mapper::render();
        print '</div>';
    }
    
    /*
     * 找地點街景圖
     */
    public function photo($userWhere)
    {
        $where = ($userWhere == null) ? '中佑集團' : $userWhere;
        Mapper::location($where)->streetview(1, 1, ['ui' => false]);
        print '<div style="height: 800px; width: 1500px;">';
        print Mapper::render();
        print '</div>';
    }
}