<?php

class line_on_show
{
    /**
     *@param $type as string. Can be any one of:
     * - 'pop-up'
     * - 'explode'
     * - 'mid-slide'
     * - 'drop'
     * - 'fade-in'
     * - 'shrink-in'
     * @param $cascade as float. Cascade in seconds
     * @param $delay as float. Delay before animation starts in seconds.
     */
    public function __construct($type, $cascade, $delay)
    {
        $this->type = $type;
        $this->cascade = (float) $cascade;
        $this->delay = (float) $delay;
    }
}

class line
{
    public function line()
    {
        $this->type = 'line';
        $this->values = [];
    }

    /**
     * Set the default dot that all the real
     * dots inherit their properties from. If you set the
     * default dot to be red, all values in your chart that
     * do not specify a colour will be red. Same for all the
     * other attributes such as tooltip, on-click, size etc...
     * 
     * @param $style as any class that inherits base_dot
     */
    public function set_default_dot_style($style)
    {
        $tmp = 'dot-style';
        $this->$tmp = $style;
    }

    /**
     * @param $v as array, can contain any combination of:
     *  - integer, Y position of the point
     *  - any class that inherits from dot_base
     *  - <b>null</b>
     */
    public function set_values($v)
    {
        $this->values = $v;
    }

    /**
     * Append a value to the line.
     *
     * @param mixed $v
     */
    public function append_value($v)
    {
        $this->values[] = $v;
    }

    public function set_width($width)
    {
        $this->width = $width;
    }

    public function set_colour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * sytnatical sugar for set_colour.
     */
    public function colour($colour)
    {
        $this->set_colour($colour);

        return $this;
    }

    public function set_halo_size($size)
    {
        $tmp = 'halo-size';
        $this->$tmp = $size;
    }

    public function set_key($text, $font_size)
    {
        $this->text = $text;
        $tmp = 'font-size';
        $this->$tmp = $font_size;
    }

    public function set_tooltip($tip)
    {
        $this->tip = $tip;
    }

    /**
     * @param $text as string. A javascript function name as a string. The chart will
     * try to call this function, it will pass the chart id as the only parameter into
     * this function. E.g:
     */
    public function set_on_click($text)
    {
        $tmp = 'on-click';
        $this->$tmp = $text;
    }

    public function loop()
    {
        $this->loop = true;
    }

    public function line_style($s)
    {
        $tmp = 'line-style';
        $this->$tmp = $s;
    }

    /**
     * Sets the text for the line.
     *
     * @param string $text
     */
    public function set_text($text)
    {
        $this->text = $text;
    }

    public function attach_to_right_y_axis()
    {
        $this->axis = 'right';
    }

    /**
     *@param $on_show as line_on_show object
     */
    public function set_on_show($on_show)
    {
        $this->{'on-show'} = $on_show;
    }

    public function on_show($on_show)
    {
        $this->set_on_show($on_show);

        return $this;
    }
}
