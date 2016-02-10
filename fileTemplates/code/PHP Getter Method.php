/**
 * @return ${TYPE_HINT}
 */
#if (${TYPE_HINT} == "boolean")
public ${STATIC} function is${NAME}()
#else
public ${STATIC} function get${NAME}()
#end
{

#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
