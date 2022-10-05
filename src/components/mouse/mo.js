/**
 * UPDATES AND DOCS AT: https://github.com/wangyang0210
 * https://www.cnblogs.com/wangyang0210/
 * @author: WangYang, wangyang.0210@foxmail.com
 * @Date 2022-09-04 19:36
 * ----------------------------------------------
 * @describe: 使用mo.js实现各种效果
 */
import mojs from '@mojs/core'

export default function main(options) {

    const burst = new mojs.Burst({
        left: 0, top: 0,
       ...options
    });
    burst.el.style.zIndex = 100;

    document.addEventListener( 'click', function (e) {
        burst
            .tune({ x: e.pageX, y: e.pageY })
            .setSpeed(3)
            .replay();
    });
}
