<?php

class __Mustache_76e2f361e7ec7ee1a3b57642b0d4b37a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionD84fb6703fe33ebac1b6758572ee4cac($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<a href="';
        $value = $this->resolveValue($context->find('url'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '" target="_blank">
';
        $buffer .= $indent . '    ';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionF8a1533dcefdb25763dd21c9bb3f5d57($context, $indent, $value);
        $buffer .= ' ';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC39b10c42f65bf4b9f12a00911cf13a3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</a>
';

        return $buffer;
    }

    private function sectionD84fb6703fe33ebac1b6758572ee4cac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/bullhorn, core ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . ' i/bullhorn, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF8a1533dcefdb25763dd21c9bb3f5d57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'calltofeedback_give';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'calltofeedback_give';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5d6ff3f0463d3a1689465808bc0d547(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'opensinnewwindow';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'opensinnewwindow';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC39b10c42f65bf4b9f12a00911cf13a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/externallink, core, {{#str}}opensinnewwindow{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/externallink, core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD5d6ff3f0463d3a1689465808bc0d547($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
