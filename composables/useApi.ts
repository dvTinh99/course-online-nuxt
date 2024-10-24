export const useApi: typeof useFetch = (request, opts?) => {
  const token = useCookie('_token')
  const runtimeConfig = useRuntimeConfig()
  const url =`${runtimeConfig.public.apiBase}${request}` 
  return $fetch(url, {
    headers: {
      Authorization: `Bearer ${token.value}`
    },
    ...opts
  })
}

export const useLazyApi: typeof useLazyFetch = (request, opts?) => {
  const token = useCookie('_token')

  return $fetch(request, {
    headers: {
      Authorization: `Bearer ${token.value}`
    },
    ...opts
  })
}
