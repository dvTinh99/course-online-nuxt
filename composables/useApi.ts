export const useApi: typeof useFetch = (request, opts?) => {
  const token = useCookie('_token')
  const runtimeConfig = useRuntimeConfig()
  const url =`${runtimeConfig.public.apiBase}${request}` 

  return useFetch(url, {
    headers: {
      Authorization: `Bearer ${token.value}`
    },
    ...opts
  })
}

export const useLazyApi: typeof useLazyFetch = (request, opts?) => {
  const token = useCookie('_token')

  return useLazyFetch(request, {
    headers: {
      Authorization: `Bearer ${token.value}`
    },
    ...opts
  })
}
